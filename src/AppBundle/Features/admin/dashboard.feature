Feature: Access dashboard
    In order to maintain the application
    As an administrator
    I should be able to access the dashboard


    Scenario: Access dashboard
        Given I am on "/admin"
        When I fill in "username" with "admin"
        And I fill in "password" with "admin"
        Then I should see "Sonata Admin"
