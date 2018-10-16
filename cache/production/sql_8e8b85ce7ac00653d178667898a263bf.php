<?php exit; ?>
1539730737
SELECT topic_title, forum_id, topic_id FROM phpbb_topics t WHERE topic_status <> 2 AND topic_visibility = 1 AND topic_type = 0 AND topic_moved_id = 0 ORDER BY topic_time DESC LIMIT 10
106
a:1:{i:0;a:3:{s:11:"topic_title";s:17:"Welcome to phpBB3";s:8:"forum_id";s:1:"2";s:8:"topic_id";s:1:"1";}}