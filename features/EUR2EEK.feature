Feature: EUR2EEK
  In order to convert EUR to EEK
  As a calculator user
  I need to be able to multiply 15.6466 with first value

  Scenario:
    Given I have a value "1"
    When I use EUR2EEK function
    Then I should get "15.6466"

  Scenario:
    Given I have a value "40"
    When I use EUR2EEK function
    Then I should get "625.864"
