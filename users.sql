DROP TABLE IF EXISTS fp_users;

CREATE TABLE fp_users (
  uid smallint(6) NOT NULL PRIMARY KEY,
  login varchar(12) NOT NULL UNIQUE,
  pword varchar(12) NOT NULL,
  firstName varchar(25) NOT NULL,
  lastName varchar(30) NOT NULL
);
  
ALTER TABLE fp_users
  MODIFY uid smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO fp_users (login, pword, firstName, lastName) VALUES
('esmith', 'esmith', 'eddie', 'smith'),
('rblume', 'rblume', 'rose', 'blume'),
('snorth', 'snorth', 'sally', 'north'),
('jwest', 'jwest', 'jackie', 'west'),
('tsmith', 'tsmith', 'tony', 'smith'),
('rhex', 'rhex', 'rex', 'hex'),
('ajackson', 'ajackson', 'allie', 'jackson'),
('jjohns', 'jjohns', 'jill', 'johns');