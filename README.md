# Distorsion

- projet
     - class
        - User.php
        - Salon.php
        - Category.php  
        - Post.php
    - logic
        - router.php
        - database.php
    - pages
        - homepage.php
        - login.php
        - register.php
        - registerSalon.php
        - registerCategory.php
    - templates
        - partials
            - _main.phtml
        - login
            - login.phtml
            - _login-form.phtml
        - registerSalon
            - registerSalon.phtml
            - registerSalon-form.phtml
        - register
            - register.phtml
            - _register-form.phtml
        - registerCategory
            - registerCategory.phtml
            - registerCategory-form.phtml
        - aside
            - aside.phtml
        - chatroom
            - chatroom.phtml
        - layout.phtml 
    - assets
        - js
        - styles
            - scss
            - css
        - images
    - index.php










- class
        - User.php
            -> id
            -> username
            -> email
            -> password
                - getter
                - setter
                - createPost()
        - Salon.php
            -> id
            -> name
            -> category
                - getter
                - setter
      
        - Category.php  
            -> id
            -> name
                - getter
                - setter
                - - createSalon()
        - Post.php
            -> id
            -> text
            -> salon
                - getter
                - setter
                - insertInSalon


- table
    - User
    - Category
    - Salon
    - Post
    - post_id
    - category_id


 - route
    - accueil
    - connexion
    - inscritpion
    - creation-de-categorie
    - creation-de-salon