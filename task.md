
## Editing Notes
Work on the tasks the same way you work on tasks in your everyday work.
The written code should be protected by unit tests.
There is no need to pay attention to the frontend design, but it can be supplemented with a bootstrap theme.

It would be advantageous if the individual work steps were mapped using commits.
Create a README file that describes how to start the application.
Try to work on as much as possible in the time given to you.
If you have any questions about the task, you are welcome to email Sven Hanisch (sven.hanisch@mail.schwarz), Klaus Schürg (klaus.schuerg@mail.schwarz) or Foued Dghaies (Foued.Dghaies@mail.schwarz). ) turn.
You are welcome to provide us with the finished, executable project via any exchange platform, such as Bitbucket, Gitlab or Github.

## Introduction
A mini-CMS is to be set up in which portals (DE, EN,...) and associated pages (e.g. imprint, ...) can be maintained. Maintaining this content should be as easy and intuitive as possible for the CMS user. Validation must also be taken into account here (e.g. a portal has an ISO Alpha-2 country code).

## Task 1
Set up a Symfony application version 5 (or higher) within a Docker environment.
There should be 2 portals in the application:
• EN
• EN
Each portal has an imprint page (e.g. localhost/de/impressum or localhost/en/imprint). Under this link, only the content for the appropriate language is output. A maintenance option should be created in which the imprint for the respective portal can be created or changed.

## Task 2
Create a REST API that can be used to retrieve the data from Task 1 as JSON.
Bonus: API documentation via OpenAPI YAML

## Task 3
A user overview is now to be built into the existing Symfony application. This should be accessible via localhost/users.
When called, the users are retrieved via a service from the following API: https://jsonplaceholder.typicode.com/users.
The individual users are then converted into value objects and displayed in tabular form.

## Task 4
Implement a login for the CMS. The login can be implemented via a database or oAUTH. There should be 2 roles:
• ROLE_USER
• ROLE_ADMIN
New pages and portals within the CMS may only be created and edited by the ROLE_ADMIN role. The ROLE_USER role only has read permission.