Wordpress Envirnonment for Celgene bms-outcomes

Below are instructions for setting up a local development environment using Lando, in conjunction with a remote development environment on Pantheon.

Install Lando Download and install Lando – A docker based local development environment. Download the latest .dmg file from this LINK.

Prepare the Lando Project with the Pantheon recipe Create a Pantheon account. https://pantheon.io/register

Provide the email address of your Panthon account to the site admin.

Generate a "machine token" from your pantheon account.

Create a folder called bms-outcomes

From within that folder run: $ lando init --source pantheon

Enter your machine token when prompted.

Select 'clg-revhcp-v2' from the list of environments.

Lando will build you local development environment.

Build/Start. $ lando start

Get Latest DB and Files from Pantheon Get a machine token from your admin and run:

$ lando pull

And select “dev” for code, and “test” for database, and “test” for files.

(Unless you want an exact copy of dev, then select “dev” for all)

Local URLs After started, Lando will display URLs that you can visit in your local browser. You probably want the HTTP one.

Get Latest Code from Github Create a new remote called "github" to get code from github.

$ git remote add github git@github.com:RauxaRepo/bms-outcomes.git

$ git fetch github

Get Dependencies To install WordPress plugins and other dependencies.

$ lando composer update

When composer update runs, it will call composer get_frontend a script that pulls in the compiled frontend code from the clg-frontend-HCP repository and places it in the /static folder as well as in the /themes/clg-hcp/assets folder.

Deploy via Github and Deploybot Create a feature branch locally and push that feature branch to the github remote with the same name.

For example:

$ git checkout -b feature/new-feature

...do work ...commit work...

$ git push github feature/new-feature

Create a pull request at github to merge that feature with the develop branch.

Once merged, Deploybot will be triggerd to deploy the develop branch to Pantheon.

v2.0.0
