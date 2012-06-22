ALTER TABLE `blog`
ADD `nametiedame` varchar(20);

--//@UNDO
ALTER TABLE `BLOG`
DROP COLUMN `nametiedame`;
