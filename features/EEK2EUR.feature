Feature: EEK2EUR
  In order to convert EEK to EUR
  As a calculator user
  I need to be able to separate 15.6466 from first value

  Scenario:
    Given I have a value "15.6466"
    When I use EEK2EUR function
    Then I should get "1"

  Scenario:
    Given I have a value "3200"
    When I use EEK2EUR function
    Then I should get "204.5172753185996"
