-- データベース作成
DROP DATABASE IF EXISTS paging_php;
CREATE DATABASE paging_php;
use paging_php;

-- commentsテーブル作成
DROP TABLE IF EXISTS comments;
CREATE TABLE comments (
  id NOT NULL AUTO_INCREMENT PRIMARY KEY,
  comment VARCHAR(255) NOT NULL,
  created DATETIME,
  modified DATETIME
);

-- データ挿入
INSERT INTO comments (comment, created, modified) VALUES 
('コメント1', now(),now()),
('コメント2', now(),now()),
('コメント3', now(),now()),
('コメント4', now(),now()),
('コメント5', now(),now()),
('コメント6', now(),now()),
('コメント7', now(),now()),
('コメント8', now(),now()),
('コメント9', now(),now()),
('コメント10', now(),now()),
('コメント11', now(),now()),
('コメント12', now(),now()),
('コメント13', now(),now()),
('コメント14', now(),now()),
('コメント15', now(),now()),
('コメント16', now(),now()),
('コメント17', now(),now()),
('コメント18', now(),now());