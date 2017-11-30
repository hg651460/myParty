CREATE TABLE Customer
(
  CustomerId int NOT NULL AUTO_INCREMENT,
  email 		VARCHAR(20)	NOT NULL UNIQUE,
  CustomerFname	 VARCHAR(15)		 NOT NULL,
  CustomerLname	 VARCHAR(15)		 NOT NULL,
  PRIMARY KEY (CustomerId )
);
INSERT INTO `customer` VALUES ('1','ab12@gmail.com','Aaron','Bryn');
INSERT INTO `customer` VALUES ('2','ac13@gmail.com','Abby','Craw');
INSERT INTO `customer` VALUES ('3','cd14@gmail.com','Casey','Dryer');
INSERT INTO `customer` VALUES ('4','fh15@gmail.com','Frank','Hobbs');
INSERT INTO `customer` VALUES ('5','kw16@gmail.com','Kerry','White');
INSERT INTO `customer` VALUES ('6','ue17@gmail.com','Uni','Eugene');
INSERT INTO `customer` VALUES ('7','og18@gmail.com','Olivia','Groundworth');
INSERT INTO `customer` VALUES ('8','jk19@gmail.com','Jerry','Krewl');
INSERT INTO `customer` VALUES ('9','dw20@gmail.com','Donald','White');
INSERT INTO `customer` VALUES ('10','rl21@gmail.com','Rachel','Lobbs');
INSERT INTO `customer` VALUES ('11','th22@gmail.com','Theadore','Hackle');
INSERT INTO `customer` VALUES ('12','as23@gmail.com','Abby','Smith');
INSERT INTO `customer` VALUES ('13','hs24@gmail.com','Harry','Styles');
INSERT INTO `customer` VALUES ('14','bk25@gmail.com','Beyonce','Knowles');
INSERT INTO `customer` VALUES ('15','bc26@gmail.com','Brandon','Carter');
INSERT INTO `customer` VALUES ('16','st27@gmail.com','Sherry','Trifol');
INSERT INTO `customer` VALUES ('17','mo28@gmail.com','Michelle','Obama');
INSERT INTO `customer` VALUES ('18','jc29@gmail.com','Jermaine','Cole');
INSERT INTO `customer` VALUES ('19','kw30@gmail.com','Kanye','West');
INSERT INTO `customer` VALUES ('20','jc31@gmail.com','Jordan','Crawley');
INSERT INTO `customer` VALUES ('21','es32@gmail.com','Edward','Sherean');

CREATE TABLE Place
(
  PlaceID int NOT NULL AUTO_INCREMENT,
  address 	VARCHAR(20)	NOT NULL,
  PlaceName 	VARCHAR(15)	NOT NULL,
  City 		CHAR(15)		NOT NULL,
  max_capacity	INT 		NOT NULL,
  min_capacity		INT		NOT NULL,
  costByPerson	INT 		NOT NULL,
  PRIMARY KEY (PlaceID)
);

INSERT INTO `place` VALUES ('','4 Crystal Court','House','Sicklerville', 15, 5, 40);
INSERT INTO `place` VALUES ('','2801 Pacific Avenue','Cuba Libre Resturant','Alantic City', 450, 100, 165);
INSERT INTO `place` VALUES ('','84 S Lansdowne Avenue','Twentieth Century Club','Lansdowne', 175, 10, 70);
INSERT INTO `place` VALUES ('','2019 S Juniper St','InterCut Studios','Philadelphia', 100, 30, 75);
INSERT INTO `place` VALUES ('','212 Centre Street','The Gables','Beach Haven', 125 ,5, 40);
INSERT INTO `place` VALUES ('','1625 Cecil B Moore Avenue','TLO Event Coimplex','Philadelphia', 500, 300, 500);
INSERT INTO `place` VALUES ('','2373 Hwy 9','Versailles Ballroom','Toms River', 400, 100, 60);
INSERT INTO `place` VALUES ('','2 Rector Street','Bourbon Blue Resturant','Philadelphia', 150, 70, 85);
INSERT INTO `place` VALUES ('','PO Box 2234 19073','The Ballroom at Westside','West Chester', 250, 30, 55);
INSERT INTO `place` VALUES ('','1324 Locust Street','Arts Ballroom','Philadelphia', 400, 200, 100);
INSERT INTO `place` VALUES ('','2715 E Allegheny Ave','Lithuanian Music Hall','Philadelphia', 250, 45, 40);
INSERT INTO `place` VALUES ('','4809 Germantown Avenue','The Victorian Banquet Hall','Philadelphia', 300, 85, 1250);
INSERT INTO `place` VALUES ('','399 Monmouth St','Windsor Ballroom','Hightstown', 400, 55, 60);
INSERT INTO `place` VALUES ('','48 Country Club Road','Spring Ford Country Club','Royersford', 240, 75, 10);
INSERT INTO `place` VALUES ('','401 S. Columbus Blvd','Entertainment Cruises Philadelphia','Philadelphia', 530, 5, 46);
INSERT INTO `place` VALUES ('','760 Langhorne Newtown Road','Bridgetown Mill House','Langhorne', 150, 5, 35);
INSERT INTO `place` VALUES ('','707 East Lancaster Ave','Sheraton Great Valley','Malvern', 200, 5, 40);
INSERT INTO `place` VALUES ('','191 S. Newtown Street Road','Teca Restaurant & Wine Bar','Newtown Square', 200, 5, 40);
INSERT INTO `place` VALUES ('','111 South 17th Street','1925 Lounge','Philadelphia', 350, 100, 80);
INSERT INTO `place` VALUES ('','1445 East Schuylkill Road','Giannis Event Venue','Pottstown', 120, 15, 24);

CREATE TABLE Type
(
  TypeID 	int NOT NULL AUTO_INCREMENT,
  TypeName 	VARCHAR(15)	 NOT NULL,
  PRIMARY KEY (TypeID)
);

INSERT INTO `type` VALUES ('1','Baby Boy Shower');
INSERT INTO `type` VALUES ('2','Baby Girl Shower');
INSERT INTO `type` VALUES ('3','Gender Reveal');
INSERT INTO `type` VALUES ('4','General Baby Shower');
INSERT INTO `type` VALUES ('5','Birthday Party');
INSERT INTO `type` VALUES ('6','Surprise Party');
INSERT INTO `type` VALUES ('7','Dinner');
INSERT INTO `type` VALUES ('8','Anniversary');
INSERT INTO `type` VALUES ('9','Tea Party');
INSERT INTO `type` VALUES ('10','Garden Party');
INSERT INTO `type` VALUES ('11','Cocktail Party');
INSERT INTO `type` VALUES ('12','Reception');
INSERT INTO `type` VALUES ('13','Costume Party');
INSERT INTO `type` VALUES ('14','Christmas Party');
INSERT INTO `type` VALUES ('15','Halloween PArty');
INSERT INTO `type` VALUES ('16','Bachlor Party');
INSERT INTO `type` VALUES ('17','Bachlorette Party');
INSERT INTO `type` VALUES ('18','Murder Mystery Party');
INSERT INTO `type` VALUES ('19','Dance Party');
INSERT INTO `type` VALUES ('20','Karoke Party');

CREATE TABLE Theme
(
  ThemeID 	int NOT NULL AUTO_INCREMENT,
  ThemeName		VARCHAR(15)	NOT NULL,
  ThemeCost 		INT 			NOT NULL,
  ThemePicture 	LONGBLOB 		NOT NULL,
  PRIMARY KEY (ThemeID)
);

INSERT INTO `theme` VALUES ('1','Kids', 50, '');
INSERT INTO `theme` VALUES ('2','Friends', 100, '');
INSERT INTO `theme` VALUES ('3','21st', 50, '');
INSERT INTO `theme` VALUES ('4','50th', 75, '');
INSERT INTO `theme` VALUES ('5','100th', 75, '');
INSERT INTO `theme` VALUES ('6','Toga', 10, '');
INSERT INTO `theme` VALUES ('7','20s', 100, '');
INSERT INTO `theme` VALUES ('8','80s', 50, '');
INSERT INTO `theme` VALUES ('9','90s', 30, '');
INSERT INTO `theme` VALUES ('10','70s', 40, '');
INSERT INTO `theme` VALUES ('11','Animal', 70, '');
INSERT INTO `theme` VALUES ('12','Beach', 85, '');
INSERT INTO `theme` VALUES ('13','Carnival', 35, '');
INSERT INTO `theme` VALUES ('14','Western', 20, '');
INSERT INTO `theme` VALUES ('15','Nautical', 90, '');
INSERT INTO `theme` VALUES ('16','Superhero', 150, '');
INSERT INTO `theme` VALUES ('17','Unicorn', 500, '');
INSERT INTO `theme` VALUES ('18','Rockstar', 74, '');
INSERT INTO `theme` VALUES ('19','New Years', 28, '');
INSERT INTO `theme` VALUES ('20','Zombie', 94, '');

CREATE TABLE Customer_Phone
(
  Phone 	INT(11) NOT NULL ,
  email 	VARCHAR(20)	NOT NULL,
  PRIMARY KEY (Phone, email ),
  FOREIGN KEY (email) REFERENCES Customer(email) 
);

INSERT INTO `Customer_Phone` VALUES (5555555555,'ab12@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5555555556,'ac13@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5555555576,'cd14@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5555557854,'fh15@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5598555576,'kw16@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5557896576,'ue17@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5521345576,'og18@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5555875123,'jk19@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5587623465,'dw20@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5550977878,'rl21@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5533322111,'th22@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5555097778,'as23@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5565234000,'hs24@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5500000000,'bk25@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5552134367,'bc26@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5550974689,'st27@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5556432234,'mo28@gmail.com');
INSERT INTO `Customer_Phone` VALUES (5635863567,'jc29@gmail.com');
INSERT INTO `Customer_Phone` VALUES (4738265493,'kw30@gmail.com');
INSERT INTO `Customer_Phone` VALUES (9375628394,'jc31@gmail.com');
INSERT INTO `Customer_Phone` VALUES (2755274860,'es32@gmail.com');

CREATE TABLE Planner
(
  PlannerID 	int NOT NULL AUTO_INCREMENT,
  PlannerFName 	 VARCHAR(15)	 NOT NULL,
  PlannerLName 	 VARCHAR(15)	 NOT NULL,
  PlannerPhone 	INT(11)		NOT NULL,
  PlannerEmail 	VARCHAR(20)	 NOT NULL,
  managerID 	int NOT NULL ,
  PRIMARY KEY (PlannerID),
  FOREIGN KEY (managerID) REFERENCES Manager(managerID),
  UNIQUE (PlannerEmail)
);

INSERT INTO `Planner` VALUES ('1','Tyrese', 'Carlile',7483648349,'tc@myparty.com', '1');
INSERT INTO `Planner` VALUES ('2','Maurie', 'Calfil',2184738492,'mc@myparty.com','1');
INSERT INTO `Planner` VALUES ('3','Saint', 'Ofal',2876549283,'so@myparty.com','1');
INSERT INTO `Planner` VALUES ('4','Kim', 'Shackom',6372847291,'ks@myparty.com','1');


CREATE TABLE Manager
(
  managerID	 	int NOT NULL AUTO_INCREMENT,
  ManagerFName 	 VARCHAR(15)	 NOT NULL,
  ManagerLName 	 VARCHAR(15)	 NOT NULL,
  ManagerPhone 	INT(11)		NOT NULL,
  email 		VARCHAR(20)	 NOT NULL,
  PRIMARY KEY (managerID)
);

INSERT INTO `Manager` VALUES ('1','Catherine', 'Franklin', 8474838493, 'cf1@myparty.com');


CREATE TABLE Party
(
  PartyID	 int NOT NULL AUTO_INCREMENT,
  NoOfGuests	 INT 		NOT NULL,
  DateTime 	DATETIME 	 NOT NULL,
  CustomerId 	int NOT NULL ,
  PlannerID	int NOT NULL ,
  PlaceID	 int NOT NULL ,
  TypeID    int NOT NULL ,
  ThemeID 	 int NOT NULL ,
  PRIMARY KEY (PartyID),
  FOREIGN KEY (CustomerId) REFERENCES Customer(CustomerId),
  FOREIGN KEY (PlannerID) REFERENCES Planner(PlannerID),
  FOREIGN KEY (PlaceID) REFERENCES Place(PlaceID),
  FOREIGN KEY (TypeID) REFERENCES Type(TypeID),
  FOREIGN KEY (ThemeID) REFERENCES Theme(ThemeID),
  UNIQUE (DateTime)
);

INSERT INTO `Party` VALUES ('1', 15, '2017-12-01 07:00:00' ,'1', '1', '1', '1', '1');
INSERT INTO `Party` VALUES ('2', 350, '2017-12-02 03:00:00' ,'2', '2', '7', '11', '12');
INSERT INTO `Party` VALUES ('3', 500, '2018-01-05 07:00:00' ,'3', '3', '15', '10', '13');
INSERT INTO `Party` VALUES ('4', 100,'2018-04-05 07:00:00'  ,'4', '4', '2', '20', '14');
INSERT INTO `Party` VALUES ('5', 30, '2018-06-04 03:30:00' ,'5', '1', '4', '12', '15');
INSERT INTO `Party` VALUES ('6', 200, '2018-01-06 04:15:00' ,'6', '2', '10', '5', '20');
INSERT INTO `Party` VALUES ('7', 40,'2018-09-12 07:00:00' ,'7', '3', '17', '3', '19');
INSERT INTO `Party` VALUES ('8', 50, '2018-10-10 07:00:00' ,'8', '4', '20', '2', '18');
INSERT INTO `Party` VALUES ('9', 100, '2018-02-05 07:00:00' ,'9', '1', '9', '6', '17');
INSERT INTO `Party` VALUES ('10', 30, '2018-01-04 01:00:00' ,'10', '2', '3', '8', '16');
INSERT INTO `Party` VALUES ('11', 400,'2018-01-06 06:30:00' ,'11', '3', '13', '18', '2');
INSERT INTO `Party` VALUES ('12', 60, '2018-03-16 07:00:00' ,'12', '4', '11', '19', '3');
INSERT INTO `Party` VALUES ('13', 70, '2014-12-20 07:00:00' ,'13', '1', '15', '13', '4');
INSERT INTO `Party` VALUES ('14', 150, '2018-03-11 07:00:00' ,'14', '2', '12', '20', '5');
INSERT INTO `Party` VALUES ('15', 75,'2018-10-08 04:15:00' ,'5', '3', '20', '14', '6');
INSERT INTO `Party` VALUES ('16', 45, '2018-02-25 07:00:00' ,'16', '4', '7', '13', '7');
INSERT INTO `Party` VALUES ('17', 500, '2018-01-30 07:00:00' ,'17', '1', '6', '9', '8');
INSERT INTO `Party` VALUES ('18', 530, '2018-08-31 07:00:00' ,'18', '2', '15', '15', '9');
INSERT INTO `Party` VALUES ('19', 80, '2017-12-10 07:00:00' ,'19', '3', '17', '19', '10');
INSERT INTO `Party` VALUES ('20', 20, '2018-10-05 07:00:00' ,'20', 'PL4', 'P5', '12', '11');


CREATE TABLE LogInInfo
(
  password 	 VARCHAR(20) 			NOT NULL,
  email 	 VARCHAR(20)	 NOT NULL,
  CustomerId		int(11) ,
  managerID 		int(11) ,
  PlannerID		int(11) ,
  PRIMARY KEY (email),
  FOREIGN KEY (CustomerId) REFERENCES Customer(CustomerId),
  FOREIGN KEY (managerID) REFERENCES Manager(managerID),
  FOREIGN KEY (PlannerID) REFERENCES Planner(PlannerID)
  
);

INSERT INTO `LogInInfo` VALUES ('bet','ab12@gmail.com', '1',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('act','ac13@gmail.com',  '2',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('let','cd14@gmail.com', '3',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('set','fh15@gmail.com', '4',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('met','kw16@gmail.com', '5',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('black','ue17@gmail.com', '6',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('yellow','og18@gmail.com',  '7',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('purple','jk19@gmail.com', '8',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('blue','dw20@gmail.com', '9',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('azul','rl21@gmail.com',  '10',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('red','th22@gmail.com', '11',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('pink','as23@gmail.com', '12',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('green','hs24@gmail.com', '13',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('fit','bk25@gmail.com', '14',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('hit','bc26@gmail.com',  '15',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('shock','st27@gmail.com', '16',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('book','mo28@gmail.com', '17',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('look','jc29@gmail.com', '18',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('cook','kw30@gmail.com', '19',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('crazy','jc31@gmail.com', '20',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('meet','tc@myparty.com', NULL,NULL,'1');
INSERT INTO `LogInInfo` VALUES ('due','mc@myparty.com', NULL,NULL,'2');
INSERT INTO `LogInInfo` VALUES ('her','es32@gmail.com', NULL,NULL,'3');
INSERT INTO `LogInInfo` VALUES ('hue','so@myparty.com', NULL,NULL,'4');
INSERT INTO `LogInInfo` VALUES ('m1234','cf1@myparty.com', NULL,'1',NULL);
