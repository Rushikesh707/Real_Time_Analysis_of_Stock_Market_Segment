# Task 2 : Stockgraph
# Introduction: 
In today's interconnected and data-driven world, the stock market remains a focal point for individuals seeking financial growth and investment opportunities. However, the complexity of stock trading, investment strategies, and market dynamics can be overwhelming for newcomers. To bridge this knowledge gap and provide a transformative learning experience, we propose the development of a cutting-edge Real-Time Analysis of Stock Market Segment Platform.
This innovative platform harnesses the power of modern technologies, including APIs, JavaScript, and HTML, to offer a dynamic and immersive educational journey. Its primary mission is to empower novice learners with the essential knowledge and skills required to navigate the intricate world of stock trading. By delivering real-time data visualization, educational content, and interactive tools, the platform aims to demystify the stock market and instill confidence in users, whether they are budding investors or individuals simply seeking to understand financial markets better.
# Screenshot
![Screenshot 2023-09-05 004658](https://github.com/Rushikesh707/Task-2/assets/128886800/1f0e6907-1f6e-476d-b866-6805516882bd)
![Screenshot 2023-09-04 233449](https://github.com/Rushikesh707/Task-2/assets/128886800/b67a994e-e1b1-474b-b91b-594b4796e77c)
![Screenshot (302)](https://github.com/Rushikesh707/Task-2/assets/128886800/3ac94784-057a-4708-af83-81c730e28e6f)
![Screenshot (303)](https://github.com/Rushikesh707/Task-2/assets/128886800/ed334440-40ae-4cdd-a677-1a5a761442ad)
# Install dependencies and set up project
1. Install xampp server and install
2. start first 3 tab mysql and apache and filezilla
3. create database with name "trading"
4. create table with following script:
CREATE TABLE users ( id int(11) NOT NULL AUTO_INCREMENT, fname varchar(255) DEFAULT NULL, lname varchar(255) DEFAULT NULL, username varchar(300) DEFAULT NULL, email varchar(300) DEFAULT NULL, password varchar(300) DEFAULT NULL, date date NOT NULL, image varchar(100) DEFAULT NULL, PRIMARY KEY (id) );
7. store all the files in xampp/htdocs/projectname
8. to run open crome and add localhost/projectname/filename i.e http://localhost/project/login.php
