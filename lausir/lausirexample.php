<!doctype html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="dropdown.css" rel="stylesheet">

    <script>
        var request = new XMLHttpRequest();
        var resultArray;
        var html;

        function startSearch() {
            var districtID = document.getElementById("districtID").value;
            var url = "http://localhost/restServer/index.php/facility/district/" + districtID;

            request.open("GET", url, true);  // true=>asynchronous, false=>synchronous
            request.onreadystatechange = updatePage;
            request.send(null);
        }

        function updatePage() {   // callback
            if (request.readyState == 4) {
                if (request.status == 200) {
                    var serverData = request.responseText;
                    var displayArea = document.getElementById('displayArea');
                    // displayArea.innerHTML = serverData;
                    resultArray = JSON.parse(serverData);
                    html = '<table border=1>';
                    html += '<tr><th>Map ID</th><th>District</th><th>Type</th>';
                    html += '<th>Name</th><th>address</th><th>contact</th><th>Opening Hours</th><tr>';

                    resultArray.forEach(showRecord)

                    html += '</table>';
                    displayArea.innerHTML = html;   // Single Page Application (SPA)
                }
            }
        }

        function showRecord(record) {
            html += '<tr>';
            html += '<td>' + record['mapID'];
            html += '<td>' + record['districtID'];
            html += '<td>' + record['map_type'];
            html += '<td>' + record['name_e'];
            html += '<td>' + record['address_e'];
            html += '<td>' + record['contact1'];
            html += '<td>' + record['openHr_e'];
            html += '</tr>';
        }

        function setDistrict(district) {
            var element = document.getElementById("districtID");
            element.value = district;
        }
    </script>

</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <div class="d-flex gap-5 justify-content-center" id="dropdownFilter">
        <div class="dropdown-menu pt-0 mx-0 rounded-3 shadow overflow-hidden" style="width: 280px;">

            <form class="p-2 mb-2 bg-light border-bottom">
                <div class="input-group mb-3">
                    District:
                    <input type="text" id="districtID" class="form-control" placeholder="Select a campus..."
                        aria-describedby="basic-addon2">
                    <button onclick="startSearch(); return false;" class="btn btn-outline-secondary">Search</button>
                </div>
            </form>

            <ul class="list-unstyled mb-0">
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:setDistrict('CW');">
                        <span class="d-inline-block bg-success rounded-circle" style="width: .5em; height: .5em;">
                        </span>
                        Chai Wan
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:setDistrict('E');">
                        <span class="d-inline-block bg-success rounded-circle" style="width: .5em; height: .5em;">
                        </span>
                        Eastern
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:setDistrict('Wch');">
                        <span class="d-inline-block bg-success rounded-circle" style="width: .5em; height: .5em;">
                        </span>
                        Wan Chai
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:setDistrict('WTS');">
                        <span class="d-inline-block bg-success rounded-circle" style="width: .5em; height: .5em;">
                        </span>
                        Wong Tai Sin
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:setDistrict('S');">
                        <span class="d-inline-block bg-success rounded-circle" style="width: .5em; height: .5em;">
                        </span>
                        South
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="displayArea">

    </div>

</body>

</html>