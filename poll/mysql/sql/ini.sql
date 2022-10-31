-- データベース作成
DROP DATABASE IF EXISTS poll_php;
CREATE DATABASE poll_php;
use poll_php;


-- commentsテーブル作成
DROP TABLE IF EXISTS answers;
CREATE TABLE comments (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  answers INT NOT NULL,
  created DATETIME
);