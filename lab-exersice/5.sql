INSERT INTO students VALUES (1,'vipul',20);
SELECT * FROM students;
UPDATE students SET age=21 WHERE id=1;
DELETE FROM students WHERE id=1;


SELECT * FROM students WHERE name LIKE 'A%';
SELECT age, COUNT(*) FROM students GROUP BY age HAVING COUNT(*)>1;
SELECT * FROM students LIMIT 5 OFFSET 2;
SELECT * FROM students WHERE age IN (18,20);