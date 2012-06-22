-- SELECT max(jobnumber) AS '' FROM `changelog`
SELECT DISTINCT jobnumber
FROM changelog
WHERE jobnumber >=44
ORDER BY  `changelog`.`jobnumber` ASC 
LIMIT 0 , 30
