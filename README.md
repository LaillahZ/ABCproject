# Project Instructions

This project will be to take the logic you did in
the previous project and split that logic into individual
methods. 

## Step 1: Fork the project

To create a copy of my base code into your own repo, you
will need to fork this project.

In the top bar here in GitHub there is a fork button. Press that,
and make sure you are logged into your GitHub account. It will
prompt you with some default settings for this new copied repo,
and you can accept and fork the project.

You now have your own repo with a copy of my starter code for this project.

## Step 2: Clone the repo

Now you will clone your repo to your local computer. 

Click the green code button on your GitHub repo. Make sure HTTPS tab is selected
and copy the https URL.

Use your terminal/git bash on your computer and navigate to
wherever you save your Java projects. Once you are where you want
to copy the project, type:

git clone https://copiedurl

Where the copied URL is the one you copied from the green code button
on GitHub.

Hit enter and the project will clone to your computer.

## Step 3: Open the project in IntelliJ

Open IntelliJ and select open. Navigate to the salesTaxWithMethod folder
and select open. You now have the project open in IntelliJ and ready to make changes!

## Step 4: Make your changes and test

Follow the directions in the Main class to complete the assignment.
Test your project by running it and verifying it works as expected.

You can also go into the test folder to the test class and run the unit tests. 
All tests must pass to complete the assignment. If a test isn't passing, use the clues
in the console and from the test itself to figure out what you need to change. Do NOT edit the
tests. I will notice, and you will lose points.

## Step 5: Push changes to GitHub

Once you have made your changes and tested that they work, you will need to 
push your changes to GitHub. 

In IntelliJ there's a terminal already open you can use, or you can do this in
your own terminal as long as you navigated to the project directory.

In the terminal type the following commands:<br>

git add .<br>

git commit -m "summary of your changes"<br>

git push<br>

At any point you can type: git status
This will give you the status of your changes, whether you added
or committed them already.

You will repeat this process anytime you want to push new changes.

## Step 6: Submit a pull request

When you are ready to submit you will need to submit a pull request. A pull request
is a git terminology that means you are wanting to submit your changes back to the repo
you forked from (mine). This gives us a great layout for reviewing the changes you made
and checking that the automated tests passed.

To do this you will start with your repo open in GitHub. Click on the Pull Request tab located
on the top bar.

Click "New pull request".

By default, the branches will be main and will target your main branch to merge into my repo's main branch.
You can accept this and click "Create pull request".

Give it a descriptive title and add a description of your changes. Then click "Submit pull request".

This will now show up on my side, and I can review your changes. It will also kick off an automated pipeline
to run tests. Give it a few minutes, and you'll see a checkmark next to the job. 

## Step 7: Turn it in

I will review the code and tests through the pull request, but to make sure I don't miss anything please
submit your repo URL to the dropbox in MyHills.
