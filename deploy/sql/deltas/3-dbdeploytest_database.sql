ALTER TABLE `deploytest`
ADD `nametiedame` varchar(20);

--//@UNDO
ALTER TABLE `deploytest`
DROP COLUMN `nametiedame`;
