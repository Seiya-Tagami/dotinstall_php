-- データベース作成
DROP DATABASE IF EXISTS poll_php;
CREATE DATABASE poll_php;
use poll_php;


-- commentsテーブル作成
DROP TABLE IF EXISTS answers;
CREATE TABLE answers (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  answer INT NOT NULL,
  created DATETIME,
  remote_addr VARCHAR(15) NOT NULL,
  user_agent VARCHAR(255) NOT NULL,
  answer_date DATE,
  unique unique_answer(remote_addr, user_agent, answer_date)
  -- uniqueインデックスを設定
);