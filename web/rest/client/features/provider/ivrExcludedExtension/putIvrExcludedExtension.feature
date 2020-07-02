Feature: Update ivr excluded extensions
  In order to manage ivr excluded extensions
  As a client admin
  I need to be able to update them through the API.

  @createSchema
  Scenario: Update a ivr excluded extension
    Given I add Company Authorization header
     When I add "Content-Type" header equal to "application/json"
      And I add "Accept" header equal to "application/json"
      And I send a "PUT" request to "/ivr_excluded_extensions/1" with body:
    """
      {
          "id": 1,
          "ivr": 1,
          "extension": 2
      }
    """
    Then the response status code should be 200
     And the response should be in JSON
     And the header "Content-Type" should be equal to "application/json; charset=utf-8"
     And the JSON should be equal to:
    """
     {
          "id": 1,
          "ivr": 1,
          "extension": 2
      }
    """
