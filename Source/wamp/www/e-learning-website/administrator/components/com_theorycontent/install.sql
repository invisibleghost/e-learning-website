DROP TABLE IF EXISTS `#__theories`;
 
CREATE TABLE `#__theories` (
  `theory_id` int(11) NOT NULL auto_increment,
  `theory_objective` varchar(255),
  `theory_name` varchar(255),
  `theory_file_dat_path` varchar(255),
  `theory_file_video_path` varchar(255),
  `theory_description` varchar(255),

	
  PRIMARY KEY (`theory_id`)
);
 
INSERT INTO  `db_e_learning`.`jos_theories` (
`theory_id` ,
`theory_objective` ,
`theory_name` ,
`theory_file_dat_path` ,
`theory_file_video_path` ,
`theory_description`
)
VALUES (
NULL ,  'M?c ti�u c?a b�i l? thuy?t',  'T�n b�i l? thuy?t',  'http://localhost/e-learning-website/data/TheoryContent/lythuyet.dat', 'http://localhost/e-learning-website/data/TheoryVideo/boy.flv',  'Gi?i thi?u chung v? b�i l? thuy?t '
);