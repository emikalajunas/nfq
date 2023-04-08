# Internship Take Home Test 

Our NFQ team would like to congratulate you on taking on this homework task, we're delighted to see your enthusiasm for the challenge ahead!

Here you'll find everything that's necessary to complete take home test, but first - let's take a look what's the aim and what we expect from you.
We prepared this test to prove your skills & also to show you the type of projects & tasks we work on day-to-day. 

We use modern PHP frameworks, libraries and tools. We use OOP, write automatic tests & care about code quality.  

We won't ask you to create a project from scratch, instead, we'll ask you to implement additional features to already existing ones.
This project that we built is a simple blog-like Symfony application. Users of the system can see a listing of all articles & view them.

What we expect:
1. [Install](#installation) the application. We provide two ways to install the application: [via Docker](#installation) or [natively](#native-installation). We recommend to use the docker installation for its easier setup.  
2. Do the given [Tasks](#tasks) 
3. [Submit your work](#submission)

At this time you don't need to know Symfony, but we expect you will be able to learn any gaps in knowledge.

If you want to learn more about Symfony, here's some helpful resources:
* Read the documentation: https://symfony.com/doc
* Alternatively, you can watch the official video tutorials: https://symfonycasts.com/
* Alternatively, you can read the official book: https://symfony.com/book

Best of luck!


## Tasks

1. Add a new Article entry so the Listing Page has 6 Articles
   
   Details:
   * Update Data Fixtures
   * You can use [article.txt](documentation/assets/article.txt) for inspiration

   Documentation: 
   * https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html


2. Implement "Edit" functionality for an Article.

   Details:
   * Implement a new Edit Page with a new route
   * Implement a new Symfony Form for the Article
   * The user should be able to change the title, text & image of an Article 
   * Editing results are persisted in the database
   * Add a new "Edit" button in the Listing Page
   
   Documentation:
   * https://symfony.com/doc/current/page_creation.html
   * https://symfony.com/doc/current/doctrine.html
   * https://symfony.com/doc/current/forms.html

   Optional Requirements:
   * Add a new datetime "updated at" field that automatically updates after every edit
   * Sort articles in the listing page based on the "updated at" field: newly updated articles should be first  


3. Implement "X" minutes to read functionality. 
   
    Details:
    * Implement an algorithm to find how long any given text will be read in minutes:
      1. Count all words in a text that have more than 3 letters.
      2. Divide it by the 200 (the average readers' words per minute)
      3. Round up the number to get a nice value. 
    * Change all occurrences of "X min" in the Application to the actual value. 

   Optional Requirements:
   * Write a Unit Test for the Algorithm


## Submission
1. Use `git` to save your changes.
2. Make the code available in a public repository (Github, Bitbucket, etc.)
3. Send the repository URL to Ugnė Rumšaitė <ugne.rumsaite@nfq.lt>

//-----------------------------------------------------
2023 04 08 NOTES from Edvinas:
2.3 How user can change image? With simple hyperlink copy/paste action to form? Or with file uploading? If to follow logic from given task source files (AppFixtures.php->getArticleData()->img stroke): i made it OK.
2.5 There is allready EDIT button in main page near VIEW. Need another one? 
3. OPTIONAL: for family circumstances i need more time to make it (i must learn it from scratch :) ) so as it is optinal i am sending rest made task part.


P.S Made a lame error from the beggining: did not made any commits to github till end of 2 part of the task.
P.P.S. My symfony knowledge experience till this task was 0 so sorry if some task parts made in lame way :).
P.P.P.S. In 2020 spring when quarantine started and Petras written me that NFQ Academy will not start: I was really looking forward to this opportunity so many thanks in advance for task and possibility to try.

edvinas.mikalajunas@gmail.com
0037067389506
//-----------------------------------------------------


