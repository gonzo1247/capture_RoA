<?php exit; ?>
1539730737
SELECT a.*, t.forum_id FROM phpbb_attachments a, phpbb_topics t WHERE a.topic_id <> 0 AND a.topic_id = t.topic_id AND t.forum_id IN (1, 2) ORDER BY filetime DESC, post_msg_id ASC LIMIT 8
6
a:0:{}