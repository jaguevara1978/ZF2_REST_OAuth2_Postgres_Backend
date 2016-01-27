<? return array (
  'controllers' => 
  array (
    'invokables' => 
    array (
      'Challenge\\Controller\\AssignedChallengeSponsorshipController' => 'Challenge\\Controller\\AssignedChallengeSponsorshipController',
      'Challenge\\Controller\\CategoryChallengesController' => 'Challenge\\Controller\\CategoryChallengesController',
      'Challenge\\Controller\\ChallengeCategoryController' => 'Challenge\\Controller\\ChallengeCategoryController',
      'Challenge\\Controller\\ChallengeFormatController' => 'Challenge\\Controller\\ChallengeFormatController',
      'Challenge\\Controller\\ChallengeHintsController' => 'Challenge\\Controller\\ChallengeHintsController',
      'Challenge\\Controller\\HintController' => 'Challenge\\Controller\\HintController',
      'Challenge\\Controller\\SponsorshipController' => 'Challenge\\Controller\\SponsorshipController',
      'Challenge\\Controller\\WeightingController' => 'Challenge\\Controller\\WeightingController',
      'Challenge\\Controller\\ChallengeController' => 'Challenge\\Controller\\ChallengeController',
      'Challenge\\Controller\\ChallengeProcessController' => 'Challenge\\Controller\\ChallengeProcessController',
      'Challenge\\Controller\\DemographicController' => 'Challenge\\Controller\\DemographicController',
      'Challenge\\Controller\\EthnicityController' => 'Challenge\\Controller\\EthnicityController',
      'Challenge\\Controller\\ForDemographicController' => 'Challenge\\Controller\\ForDemographicController',
      'Challenge\\Controller\\LanguageController' => 'Challenge\\Controller\\LanguageController',
      'Challenge\\Controller\\MaritalStatusController' => 'Challenge\\Controller\\MaritalStatusController',
      'Challenge\\Controller\\PlayerEngagementController' => 'Challenge\\Controller\\PlayerEngagementController',
      'Challenge\\Controller\\SexualOrientationController' => 'Challenge\\Controller\\SexualOrientationController',
      'Challenge\\Controller\\TriviaResponseGradeController' => 'Challenge\\Controller\\TriviaResponseGradeController',
      'Challenge\\Controller\\TriviaResponsesController' => 'Challenge\\Controller\\TriviaResponsesController',
    ),
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'assigned_challenge_sponsorship' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/assigned_challenge_sponsorship[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\AssignedChallengeSponsorshipController',
          ),
        ),
      ),
      'category_challenges' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/category_challenges[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\CategoryChallengesController',
          ),
        ),
      ),
      'challenge_category' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/challenge_category[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\ChallengeCategoryController',
          ),
        ),
      ),
      'challenge_format' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/challenge_format[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\ChallengeFormatController',
          ),
        ),
      ),
      'challenge_hints' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/challenge_hints[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\ChallengeHintsController',
          ),
        ),
      ),
      'hint' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/hint[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\HintController',
          ),
        ),
      ),
      'sponsorship' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/sponsorship[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\SponsorshipController',
          ),
        ),
      ),
      'weighting' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/weighting[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\WeightingController',
          ),
        ),
      ),
      'challenge' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/challenge[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\ChallengeController',
          ),
        ),
      ),
      'challenge_process' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/challenge_process[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\ChallengeProcessController',
          ),
        ),
      ),
      'demographic' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/demographic[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\DemographicController',
          ),
        ),
      ),
      'ethnicity' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/ethnicity[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\EthnicityController',
          ),
        ),
      ),
      'for_demographic' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/for_demographic[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\ForDemographicController',
          ),
        ),
      ),
      'language' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/language[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\LanguageController',
          ),
        ),
      ),
      'marital_status' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/marital_status[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\MaritalStatusController',
          ),
        ),
      ),
      'player_engagement' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/player_engagement[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\PlayerEngagementController',
          ),
        ),
      ),
      'sexual_orientation' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/sexual_orientation[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\SexualOrientationController',
          ),
        ),
      ),
      'trivia_response_grade' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/trivia_response_grade[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\TriviaResponseGradeController',
          ),
        ),
      ),
      'trivia_responses' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/trivia_responses[/:id]',
          'defaults' => 
          array (
            'controller' => 'Challenge\\Controller\\TriviaResponsesController',
          ),
        ),
      ),
    ),
  ),
);