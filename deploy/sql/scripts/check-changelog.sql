-- SELECT max(jobnumber) AS '' FROM `changelog`
SELECT DISTINCT jobnumber
FROM changelog
WHERE jobnumber >=${JOBNUMBER}
ORDER BY  `changelog`.`jobnumber` ASC 
LIMIT 0 , 30
