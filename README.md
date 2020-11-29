## PHP Laravel - App for posting and viewing pictures

The App is made with PHP Artisan. The app will be extended in the future and more features will be added. The current features are:

- Login and Register users.
- Follow users and see their posts on the home page.
- Edit profile page and see your posts.
- Create posts. 

## How to Run

Requires `PHP`, `nodeJS` and `composer` to be installed. Navigate to the app directory. 

### Run the following when first staring the app:

`composer update`

`php artisan storage:link`

### Run this to start the app:

`php artisan serve`

### Some important routes:

`/` --> index homepage which shows the posts of the users followed by the logged in user. The logged user needs to follow other users to see the posts.

`/profile/{user}` --> the profile page for a `user` given a certain id, for example `/profile/1`. Use this route to access other profiles to follow them.

`/profile/{user}/edit` --> edits the profile of the given `user`.

`/p/{post}` --> shows an individual post given a post id.

`/p/create` --> creates a post and for the currently logged in user.

### Users already created which can be used to log in:

| Name | Email | Username | Password |
| ------------- | ------------- | ------------- | ------------- |
| John Doe | user1@yahoo.com | User1 | laravelapp1 |
| Jane Doe | user2@yahoo.com | User2 | laravelapp2 |
| Bob Rim | user3@yahoo.com | ThirdUser | laravelapp3 |
