<?php

$result= mysqli_query($dbLink,
"SELECT *
FROM `planner_messages` 
WHERE (Planner='Acosta' AND Exception='Orders to be rescheduled out' AND SupplyType='Discrete job' ) 
UNION 
SELECT Planner,count(Exception)
FROM `planner_messages` 
WHERE Planner='Cochran'
UNION 
SELECT Planner,count(Exception)
FROM `planner_messages` 
WHERE Planner='Carlton'
UNION 
SELECT Planner,count(Exception)
FROM `planner_messages` 
WHERE Planner='Devaney'
UNION 
SELECT Planner,count(Exception)
FROM `planner_messages` 
WHERE Planner='Flores'
"
);




//ACOSTA 

//Orders to be rescheduled out
SELECT COUNT(*) AS "Message_Count"
FROM `planner_messages` 
WHERE (Planner='Acosta' AND Exception='Orders to be rescheduled out' AND SupplyType='Discrete job' AND days NOT BETWEEN -7 AND 7)
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'

//Orders to be rescheduled in
SELECT COUNT(*) AS "Message_Count"
FROM `planner_messages` 
WHERE (Planner='Acosta' AND Exception='Orders to be rescheduled in' AND SupplyType='Discrete job' AND days NOT BETWEEN -7 AND 7)
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'

//Orders to be cancelled
SELECT COUNT(*) AS "Message_Count"
FROM `planner_messages` 
WHERE (Planner='Acosta' AND Exception='Orders to be cancelled' AND SupplyType='Discrete job' AND days NOT BETWEEN -7 AND 7)
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'

//total

SELECT COUNT(*) AS "Message_Count"
FROM `planner_messages` 
WHERE (Planner='Acosta' AND SupplyType='Discrete job' AND days NOT BETWEEN -7 AND 7)
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'



//Testing
SELECT COUNT(*)
from `planner_messages`
WHERE (Planner='Acosta' AND SupplyType='Discrete job' AND days NOT BETWEEN -7 AND 7)
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'
Group by Exception


"SELECT 'Orders to be cancelled', 'Orders to be rescheduled in', 'Orders to be rescheduled out', Count(*)
from `planner_messages`
WHERE (Planner='Acosta' AND SupplyType='Discrete job' AND days NOT BETWEEN -7 AND 7)
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'






SELECT
  Planner,

COUNT(
CASE WHEN(
Exception='Orders to be cancelled'
AND SupplyType='Discrete job'
AND days NOT BETWEEN 0 AND -7
AND days NOT BETWEEN 1 AND 7
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
) 
THEN Exception ELSE NULL END) AS 'Orders to be cancelled',

COUNT(
CASE WHEN(
Exception='Orders to be rescheduled in'
AND SupplyType='Discrete job'
AND days NOT BETWEEN -7 and -1
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
) 
THEN Exception ELSE NULL END) AS 'Orders to be rescheduled in',

COUNT(
CASE WHEN(
Exception='Orders to be rescheduled out'
AND SupplyType='Discrete job'
AND days NOT BETWEEN 0 AND -7
AND days NOT BETWEEN 1 AND 7
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
) 
THEN Exception ELSE NULL END) AS 'Orders to be rescheduled out'

FROM
  planner_messages

GROUP BY Planner

























?>