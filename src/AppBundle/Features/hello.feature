@dbIsolation @user
Feature: Say hello to users
    In order to greet users
    As a developer
    I should be able to view a users profile page


    Scenario: Greet Administrator by default
        Given there is a user called "Sir" "Administrator" with the username "admin"
        When I go to "/hello"
        Then I should see "Hello, Sir Administrator!"


    Scenario: Greet Fabien
        Given there is a user called "Fabien" "Potencier" with the username "fabien"
        When I go to "/hello/fabien"
        Then I should see "Hello, Fabien Potencier!"
