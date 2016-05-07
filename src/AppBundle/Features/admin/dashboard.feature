Feature: Access dashboard
    In order to maintain the application
    As an administrator
    I should be able to access the dashboard


    Scenario: Access dashboard
        Given I am authenticated as "admin" with password "admin"
        When I go to "/admin"
        Then I should see "Sonata Admin"
