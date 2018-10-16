<?php exit; ?>
1539730737
SELECT topic_title, forum_id, topic_id FROM phpbb_topics t WHERE topic_status <> 2 AND topic_visibility = 1 AND (topic_type = 2 OR topic_type = 3) AND topic_moved_id = 0 ORDER BY topic_time DESC LIMIT 10
6
a:0:{}