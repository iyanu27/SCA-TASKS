### This week task is Automatic deployment of any application(Java) using any CI tool(Jenkins) to Heroku(PAAS)

We have various Continuous Integration tools such as Travis CI,Circle CI and Jenkins I decided to use Jenkins for the Automation 

# What is Jenkins?
 It is self-contained open source automation server which can be used to automate all sorts of tasks such as building,testing and deploying software. Jenkins requires the Java Runtime Environment (JRE). 

# How to install Jenkins
  1. Install Java: sudo apt install openjdk-8-jdk
  2. Add the Jenkins Repository and Start by importing the GPG keys: wget –q –O - https://pkg.jenkins.io/debian/jenkins.io.key | sudo apt-key add –
  3. Next, open your /etc/apt/sources.list file for editing: sudo nano /etc/apt/sources.list
  4. Scroll to the bottom of the list, and add the following lines: deb https://pkg.jenkins.io/debian binary.Save and exit
  5. Install Jenkins : sudo apt update and sudo apt install Jenkins
  6. To check Jenkins was installed and is running enter: sudo systemctl status jenkins
  7.  <img width="466" alt="jenkins" src="https://user-images.githubusercontent.com/57386428/110116923-101a5300-7d6d-11eb-8d90-6f692d75bdb7.PNG">
  8. Modify Firewall to Allow Jenkins : sudo ufw allow 8080
  9. To launch and set up Jenkins, open a web browser, and navigate to the IP address of your server: http://ip_address_or_domain:8080
  10. You should see a page that prompts you to Unlock Jenkins. You’ll need the default password. You can get the default password by switching to a command line and entering the following:  sudo cat /var/lib/jenkins/secrets/initialAdminPassword
  11. The system returns an alphanumeric code. Enter that code, then click Continue.Install neccessary plugins and create the first user
  12. You are now ready to use Jenkins

## Java application 

This repository consist of the Java files,procfile and most especially the pom.xml file

Clone this repository : https://github.com/iyanu27/store-webapp-sample.git

## After cloning the repository  we need to 'Build job when a change is pushed to GitHub' under the 'Build Triggers' section of the jenkins

    1.on GitHub go to your project page, and click on the Settings menu in the header (must have admin access). In the left sidebar of that page click 'webooks'.
    2. Click add webhook
    3. Add the callback URL of your jenkins server (leave that page open for later). Something like :
      http://jenkins.example.com:8080/github-webhook/ and application/json
    4. You will get a message if it was ping was successfully
    
<img width="891" alt="github webhook" src="https://user-images.githubusercontent.com/57386428/110117289-8028d900-7d6d-11eb-8f50-54ea72d48f02.PNG"> 

## Let us get started with our build job on Jenkins
    1. Login to the Jenkins Dashboard
    2. Create a new item you can call it any name,click on freestyle project and OK
    3. This will open the Jenkins Job Dashboard,click on the Source code management and the following details
    4. Add the github repository url and add the login credientials to github
    5. I added the heroku repository as well because this is where i plan pushing my app 
         a.Created an account on heroku,login and created app called final-test27
         b.To get the url of the  app created ,go to setting you will get something like this : https://git.heroku.com/final-test27.git
    6. Add the heroku repository and the login credientials,but the heroku uses API Key
        a.To get access to the heroku API key,go to heroku Dashboard > Account settings >Copy the API Key
        b. Go back to jenkins and add credientials Username and the API key as password.
     7. Click on Advanced under the heroku repository and give it a name heroku so that it can be used later while trying to push to heroku and leave      Branches to build as */master
     8. In the 'Build Triggers' section, Select 'GitHub hook trigger for GITScm polling'
     9. In Build,Add the build step >Execute shell command: mvn clean package,git checkout master
     10. In Build ,Add build step > Invoke top level Maven targets :Maven Version:Default and goals:clean install
     11. In Post-build Actions > Git publisher > click Push Only If Build Succeeds and add the branch :Branch to push: master and Target remote name:heroku
     12. Save and Apply
     13. Click build now if the build is successfully the App should be deployed to heroku
     14. Application dasboard on heroku..heroku image
   <img width="698" alt="SCM" src="https://user-images.githubusercontent.com/57386428/110118672-8f108b00-7d6f-11eb-8ead-94715d45deb2.PNG">
   <img width="583" alt="git pub" src="https://user-images.githubusercontent.com/57386428/110119606-e8c58500-7d70-11eb-8e32-4542bd8367e9.PNG">
   <img width="472" alt="build success" src="https://user-images.githubusercontent.com/57386428/110119077-21189380-7d70-11eb-876d-2accb9185cd7.PNG">
   <img width="848" alt="heroku" src="https://user-images.githubusercontent.com/57386428/110117751-27a60b80-7d6e-11eb-952f-98fda91ba793.PNG">
   <img width="755" alt="final app" src="https://user-images.githubusercontent.com/57386428/110119966-4ce84900-7d71-11eb-8932-c0127a61da1a.PNG">
   




