CREATE TABLE Customer
(
  CustomerId CHAR(3) NOT NULL,
  email 		VARCHAR(20)	NOT NULL UNIQUE,
  CustomerFname	 VARCHAR(15)		 NOT NULL,
  CustomerLname	 VARCHAR(15)		 NOT NULL,
  PRIMARY KEY (CustomerId )
);
INSERT INTO `customer` VALUES ('c1','ab12@gmail.com','Aaron','Bryn');
INSERT INTO `customer` VALUES ('c2','ac13@gmail.com','Abby','Craw');
INSERT INTO `customer` VALUES ('c3','cd14@gmail.com','Casey','Dryer');
INSERT INTO `customer` VALUES ('c4','fh15@gmail.com','Frank','Hobbs');
INSERT INTO `customer` VALUES ('c5','kw16@gmail.com','Kerry','White');
INSERT INTO `customer` VALUES ('c6','ue17@gmail.com','Uni','Eugene');
INSERT INTO `customer` VALUES ('c7','og18@gmail.com','Olivia','Groundworth');
INSERT INTO `customer` VALUES ('c8','jk19@gmail.com','Jerry','Krewl');
INSERT INTO `customer` VALUES ('c9','dw20@gmail.com','Donald','White');
INSERT INTO `customer` VALUES ('c10','rl21@gmail.com','Rachel','Lobbs');
INSERT INTO `customer` VALUES ('c11','th22@gmail.com','Theadore','Hackle');
INSERT INTO `customer` VALUES ('c12','as23@gmail.com','Abby','Smith');
INSERT INTO `customer` VALUES ('c13','hs24@gmail.com','Harry','Styles');
INSERT INTO `customer` VALUES ('c14','bk25@gmail.com','Beyonce','Knowles');
INSERT INTO `customer` VALUES ('c15','bc26@gmail.com','Brandon','Carter');
INSERT INTO `customer` VALUES ('c16','st27@gmail.com','Sherry','Trifol');
INSERT INTO `customer` VALUES ('c17','mo28@gmail.com','Michelle','Obama');
INSERT INTO `customer` VALUES ('c18','jc29@gmail.com','Jermaine','Cole');
INSERT INTO `customer` VALUES ('c19','kw30@gmail.com','Kanye','West');
INSERT INTO `customer` VALUES ('c20','jc31@gmail.com','Jordan','Crawley');
INSERT INTO `customer` VALUES ('c21','es32@gmail.com','Edward','Sherean');

CREATE TABLE Place
(
  PlaceID 	CHAR(3)		NOT NULL,
  address 	VARCHAR(20)	NOT NULL,
  PlaceName 	VARCHAR(15)	NOT NULL,
  City 		CHAR(15)		NOT NULL,
  max_capacity	INT 		NOT NULL,
  min_capacity		INT		NOT NULL,
  costByPerson	INT 		NOT NULL,
  PRIMARY KEY (PlaceID)
);

INSERT INTO `place` VALUES ('P1','4 Crystal Court','House','Sicklerville', 15, 5, 40);
INSERT INTO `place` VALUES ('P2','2801 Pacific Avenue','Cuba Libre Resturant','Alantic City', 450, 100, 165);
INSERT INTO `place` VALUES ('P3','84 S Lansdowne Avenue','Twentieth Century Club','Lansdowne', 175, 10, 70);
INSERT INTO `place` VALUES ('P4','2019 S Juniper St','InterCut Studios','Philadelphia', 100, 30, 75);
INSERT INTO `place` VALUES ('P5','212 Centre Street','The Gables','Beach Haven', 125 ,5, 40);
INSERT INTO `place` VALUES ('P6','1625 Cecil B Moore Avenue','TLO Event Coimplex','Philadelphia', 500, 300, 500);
INSERT INTO `place` VALUES ('P7','2373 Hwy 9','Versailles Ballroom','Toms River', 400, 100, 60);
INSERT INTO `place` VALUES ('P8','2 Rector Street','Bourbon Blue Resturant','Philadelphia', 150, 70, 85);
INSERT INTO `place` VALUES ('P9','PO Box 2234 19073','The Ballroom at Westside','West Chester', 250, 30, 55);
INSERT INTO `place` VALUES ('P10','1324 Locust Street','Arts Ballroom','Philadelphia', 400, 200, 100);
INSERT INTO `place` VALUES ('P11','2715 E Allegheny Ave','Lithuanian Music Hall','Philadelphia', 250, 45, 40);
INSERT INTO `place` VALUES ('P12','4809 Germantown Avenue','The Victorian Banquet Hall','Philadelphia', 300, 85, 1250);
INSERT INTO `place` VALUES ('P13','399 Monmouth St','Windsor Ballroom','Hightstown', 400, 55, 60);
INSERT INTO `place` VALUES ('P14','48 Country Club Road','Spring Ford Country Club','Royersford', 240, 75, 10);
INSERT INTO `place` VALUES ('P15','401 S. Columbus Blvd','Entertainment Cruises Philadelphia','Philadelphia', 530, 5, 46);
INSERT INTO `place` VALUES ('P16','760 Langhorne Newtown Road','Bridgetown Mill House','Langhorne', 150, 5, 35);
INSERT INTO `place` VALUES ('P17','707 East Lancaster Ave','Sheraton Great Valley','Malvern', 200, 5, 40);
INSERT INTO `place` VALUES ('P18','191 S. Newtown Street Road','Teca Restaurant & Wine Bar','Newtown Square', 200, 5, 40);
INSERT INTO `place` VALUES ('P19','111 South 17th Street','1925 Lounge','Philadelphia', 350, 100, 80);
INSERT INTO `place` VALUES ('P20','1445 East Schuylkill Road','Giannis Event Venue','Pottstown', 120, 15, 24);

CREATE TABLE Type
(
  TypeID 	CHAR(3)		NOT NULL,
  TypeName 	VARCHAR(15)	 NOT NULL,
  PRIMARY KEY (TypeID)
);

INSERT INTO `type` VALUES ('t1','Baby Boy Shower');
INSERT INTO `type` VALUES ('t2','Baby Girl Shower');
INSERT INTO `type` VALUES ('t3','Gender Reveal');
INSERT INTO `type` VALUES ('t4','General Baby Shower');
INSERT INTO `type` VALUES ('t5','Birthday Party');
INSERT INTO `type` VALUES ('t6','Surprise Party');
INSERT INTO `type` VALUES ('t7','Dinner');
INSERT INTO `type` VALUES ('t8','Anniversary');
INSERT INTO `type` VALUES ('t9','Tea Party');
INSERT INTO `type` VALUES ('t10','Garden Party');
INSERT INTO `type` VALUES ('t11','Cocktail Party');
INSERT INTO `type` VALUES ('t12','Reception');
INSERT INTO `type` VALUES ('t13','Costume Party');
INSERT INTO `type` VALUES ('t14','Christmas Party');
INSERT INTO `type` VALUES ('t15','Halloween Party');
INSERT INTO `type` VALUES ('t16','Bachlor Party');
INSERT INTO `type` VALUES ('t17','Bachlorette Party');
INSERT INTO `type` VALUES ('t18','Murder Mystery Party');
INSERT INTO `type` VALUES ('t19','Dance Party');
INSERT INTO `type` VALUES ('t20','Karoke Party');

CREATE TABLE Theme
(
  ThemeID 		CHAR(3)		NOT NULL,
  ThemeName		VARCHAR(15)	NOT NULL,
  ThemeCost 		INT 			NOT NULL,
  ThemePicture 	LONGBLOB 		NOT NULL,
  PRIMARY KEY (ThemeID)
);

INSERT INTO `theme` VALUES ('th1','Kids', 50, '');
INSERT INTO `theme` VALUES ('th2','Friends', 100, '');
INSERT INTO `theme` VALUES ('th3','21st', 50, '');
INSERT INTO `theme` VALUES ('th4','50th', 75, '');
INSERT INTO `theme` VALUES ('th5','100th', 75, '');
INSERT INTO `theme` VALUES ('th6','Toga', 10, '');
INSERT INTO `theme` VALUES ('th7','20s', 100, '');
INSERT INTO `theme` VALUES ('th8','80s', 50, '');
INSERT INTO `theme` VALUES ('th9','90s', 30, '');
INSERT INTO `theme` VALUES ('t10','70s', 40, '');
INSERT INTO `theme` VALUES ('t11','Animal', 70, '');
INSERT INTO `theme` VALUES ('t12','Beach', 85, '');
INSERT INTO `theme` VALUES ('t13','Carnival', 35, '');
INSERT INTO `theme` VALUES ('t14','Western', 20, '');
INSERT INTO `theme` VALUES ('t15','Nautical', 90, '');
INSERT INTO `theme` VALUES ('t16','Superhero', 150, '');
INSERT INTO `theme` VALUES ('t17','Unicorn', 500, '');
INSERT INTO `theme` VALUES ('t18','Rockstar', 74, '');
INSERT INTO `theme` VALUES ('t19','New Years', 28, '');
INSERT INTO `theme` VALUES ('t20','Zombie', 94, '');

CREATE TABLE Customer_Phone
(
  Phone 	INT(11)		NOT NULL,
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
  PlannerID 		CHAR(3)		 NOT NULL,
  PlannerFName 	 VARCHAR(15)	 NOT NULL,
  PlannerLName 	 VARCHAR(15)	 NOT NULL,
  PlannerPhone 	INT(11)		NOT NULL,
  PlannerEmail 	VARCHAR(20)	 NOT NULL,
  managerID 		CHAR(3)		 NOT NULL,
  PRIMARY KEY (PlannerID),
  FOREIGN KEY (managerID) REFERENCES Manager(managerID),
  UNIQUE (PlannerEmail)
);

INSERT INTO `Planner` VALUES ('Pl1','Tyrese', 'Carlile',7483648349,'tc@myparty.com', 'M1');
INSERT INTO `Planner` VALUES ('Pl2','Maurie', 'Calfil',2184738492,'mc@myparty.com','M1');
INSERT INTO `Planner` VALUES ('Pl3','Saint', 'Ofal',2876549283,'so@myparty.com','M1');
INSERT INTO `Planner` VALUES ('Pl4','Kim', 'Shackom',6372847291,'ks@myparty.com','M1');


CREATE TABLE Manager
(
  managerID	 	CHAR(3)	NOT NULL,
  ManagerFName 	 VARCHAR(15)	 NOT NULL,
  ManagerLName 	 VARCHAR(15)	 NOT NULL,
  ManagerPhone 	INT(11)		NOT NULL,
  email 		VARCHAR(20)	 NOT NULL,
  PRIMARY KEY (managerID)
);

INSERT INTO `Manager` VALUES ('M1','Catherine', 'Franklin', 8474838493, 'cf1@myparty.com');


CREATE TABLE Party
(
  PartyID	 CHAR(4)	 NOT NULL,
  NoOfGuests	 INT 		NOT NULL,
  DateTime 	DATETIME 	 NOT NULL,
  CustomerId 	 VARCHAR(20)	 NOT NULL,
  PlannerID	 CHAR(3)	 NOT NULL,
  PlaceID	 CHAR(3)	 NOT NULL,
  TypeID 	 CHAR(3)	 NOT NULL,
  ThemeID 	 CHAR(3),
  PRIMARY KEY (PartyID),
  FOREIGN KEY (CustomerId) REFERENCES Customer(CustomerId),
  FOREIGN KEY (PlannerID) REFERENCES Planner(PlannerID),
  FOREIGN KEY (PlaceID) REFERENCES Place(PlaceID),
  FOREIGN KEY (TypeID) REFERENCES Type(TypeID),
  FOREIGN KEY (ThemeID) REFERENCES Theme(ThemeID),
  UNIQUE (DateTime)
);

INSERT INTO `Party` VALUES ('PA1', 15, '2017-12-01 07:00:00' ,'c1', 'PL1', 'P1', 't1', 'th1');
INSERT INTO `Party` VALUES ('PA2', 350, '2017-12-02 03:00:00' ,'c2', 'PL2', 'P7', 't11', 'th12');
INSERT INTO `Party` VALUES ('PA3', 500, '2018-01-05 07:00:00' ,'c3', 'PL3', 'P15', 't10', 'th13');
INSERT INTO `Party` VALUES ('PA4', 100,'2018-04-05 07:00:00'  ,'c4', 'PL4', 'P2', 't20', 'th14');
INSERT INTO `Party` VALUES ('PA5', 30, '2018-06-04 03:30:00' ,'c5', 'PL1', 'P4', 't12', 'th15');
INSERT INTO `Party` VALUES ('PA6', 200, '2018-01-06 04:15:00' ,'c6', 'PL2', 'P10', 't5', 'th20');
INSERT INTO `Party` VALUES ('PA7', 40,'2018-09-12 07:00:00' ,'c7', 'PL3', 'P17', 't3', 'th19');
INSERT INTO `Party` VALUES ('PA8', 50, '2018-10-10 07:00:00' ,'c8', 'PL4', 'P20', 't2', 'th18');
INSERT INTO `Party` VALUES ('PA9', 100, '2018-02-05 07:00:00' ,'c9', 'PL1', 'P9', 't6', 'th17');
INSERT INTO `Party` VALUES ('PA10', 30, '2018-01-04 01:00:00' ,'c10', 'PL2', 'P3', 't8', 'th16');
INSERT INTO `Party` VALUES ('PA11', 400,'2018-01-06 06:30:00' ,'c11', 'PL3', 'P13', 't18', 'th2');
INSERT INTO `Party` VALUES ('PA12', 60, '2018-03-16 07:00:00' ,'c12', 'PL4', 'P11', 't19', 'th3');
INSERT INTO `Party` VALUES ('PA13', 70, '2014-12-20 07:00:00' ,'c13', 'PL1', 'P15', 't13', 'th4');
INSERT INTO `Party` VALUES ('PA14', 150, '2018-03-11 07:00:00' ,'c14', 'PL2', 'P12', 't20', 'th5');
INSERT INTO `Party` VALUES ('PA15', 75,'2018-10-08 04:15:00' ,'c15', 'PL3', 'P20', 't14', 'th6');
INSERT INTO `Party` VALUES ('PA16', 45, '2018-02-25 07:00:00' ,'c16', 'PL4', 'P17', 't13', 'th7');
INSERT INTO `Party` VALUES ('PA17', 500, '2018-01-30 07:00:00' ,'c17', 'PL1', 'P6', 't9', 'th8');
INSERT INTO `Party` VALUES ('PA18', 530, '2018-08-31 07:00:00' ,'c18', 'PL2', 'P15', 't15', 'th9');
INSERT INTO `Party` VALUES ('PA19', 80, '2017-12-10 07:00:00' ,'c19', 'Pl3', 'P17', 't19', 'th10');
INSERT INTO `Party` VALUES ('PA20', 20, '2018-10-05 07:00:00' ,'c20', 'PL4', 'P5', 't12', 'th11');
INSERT INTO `Party` VALUES ('PA21', 5, '2018-6-05 07:45:00' ,'c21', 'PL1', 'P1', 't16', 'th5');

CREATE TABLE LogInInfo
(
  password 	 VARCHAR(20) 			NOT NULL,
  email 	 VARCHAR(20)	 NOT NULL,
  CustomerId		CHAR(3),
  managerID 		CHAR(3),
  PlannerID		CHAR(3),
  PRIMARY KEY (email),
  FOREIGN KEY (CustomerId) REFERENCES Customer(CustomerId),
  FOREIGN KEY (managerID) REFERENCES Manager(managerID),
  FOREIGN KEY (PlannerID) REFERENCES Planner(PlannerID)
  
);

INSERT INTO `LogInInfo` VALUES ('bet','ab12@gmail.com', 'C1',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('act','ac13@gmail.com',  'C2',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('let','cd14@gmail.com', 'C3',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('set','fh15@gmail.com', 'C4',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('met','kw16@gmail.com', 'C5',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('black','ue17@gmail.com', 'c6',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('yellow','og18@gmail.com',  'c7',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('purple','jk19@gmail.com', 'c8',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('blue','dw20@gmail.com', 'c9',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('azul','rl21@gmail.com',  'c10',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('red','th22@gmail.com', 'c11',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('pink','as23@gmail.com', 'c12',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('green','hs24@gmail.com', 'c13',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('fit','bk25@gmail.com', 'c14',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('hit','bc26@gmail.com',  'c15',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('shock','st27@gmail.com', 'c16',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('book','mo28@gmail.com', 'c17',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('look','jc29@gmail.com', 'c18',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('cook','kw30@gmail.com', 'c19',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('crazy','jc31@gmail.com', 'c20',NULL,NULL);
INSERT INTO `LogInInfo` VALUES ('meet','tc@myparty.com', NULL,NULL,'Pl1');
INSERT INTO `LogInInfo` VALUES ('due','mc@myparty.com', NULL,NULL,'Pl2');
INSERT INTO `LogInInfo` VALUES ('her','es32@gmail.com', NULL,NULL,'Pl3');
INSERT INTO `LogInInfo` VALUES ('hue','so@myparty.com', NULL,NULL,'Pl4');
INSERT INTO `LogInInfo` VALUES ('m1234','cf1@myparty.com', NULL,'M1',NULL);
