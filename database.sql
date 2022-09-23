CREATE TABLE MarketInformation.detail(
    marketid int(10) NOT NULL AUTO_INCREMENT,
    timemod int(10) NOT NULL UNIQUE,
    telone int(8) NOT NULL UNIQUE,
    teltwo int(8) NOT NULL UNIQUE,
    marketname char(20) NOT NULL UNIQUE,
    PRIMARY KEY (marketid),
    FOREIGN KEY (locatid) REFERENCES LOCATION(locatid)
    );


CREATE TABLE location (
 locatid int(6) NOT NULL AUTO_INCREMENT,
 coordlat float NOT NULL UNIQUE,
 coordlon float NOT NULL UNIQUE,
 Regionregid smallint(5) NOT NULL,
 Districtdistrictid int(10) NOT NULL,
 addressname char(20),
 PRIMARY KEY (locatid)
 
 );

CREATE TABLE businesstime (
 busintid int(10),
 starttmtime time(7),
 endmtime timestamp NULL,
 utc int(10));

CREATE TABLE Region (
 regid smallint(5) NOT NULL AUTO_INCREMENT,
 regioneng int(10) NOT NULL,
 PRIMARY KEY (regid));

CREATE TABLE district (
 districtid int(10) NOT NULL AUTO_INCREMENT,
 districteng int(10),
 PRIMARY KEY (districtid));
