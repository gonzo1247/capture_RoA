<?php exit; ?>
1539730167
SELECT COUNT(topic_id) AS num_topics FROM phpbb_topics WHERE (topic_type <> 2) AND (topic_type <> 3) AND topic_visibility = 1 AND topic_moved_id = 0 
42
a:1:{i:0;a:1:{s:10:"num_topics";s:1:"1";}}