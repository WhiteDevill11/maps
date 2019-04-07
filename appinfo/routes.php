<?php
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\Maps\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
return [
    'routes' => [
        ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
        ['name' => 'page#do_echo', 'url' => '/echo', 'verb' => 'POST'],

        // utils
        ['name' => 'utils#getOptionsValues', 'url' => '/getOptionsValues', 'verb' => 'POST'],
        ['name' => 'utils#saveOptionValue', 'url' => '/saveOptionValue', 'verb' => 'POST'],

        // photos
        ['name' => 'photos#getPhotosFromDb', 'url' => '/photos', 'verb' => 'GET'],
        ['name' => 'photos#placePhotos', 'url' => '/photos', 'verb' => 'POST'],

        // contacts
        ['name' => 'contacts#getContacts', 'url' => '/contacts', 'verb' => 'GET'],

        // routing
        ['name' => 'routing#exportRoute', 'url' => '/exportRoute', 'verb' => 'POST'],

        // favorites API
        [
            'name'         => 'favorites_api#preflighted_cors',
            'url'          => '/api/1.0/{path}',
            'verb'         => 'OPTIONS',
            'requirements' => ['path' => '.+']
        ],
        ['name' => 'favorites_api#getFavorites', 'url' => '/api/{apiversion}/favorites', 'verb' => 'GET'],
        ['name' => 'favorites_api#addFavorite', 'url' => '/api/{apiversion}/favorites', 'verb' => 'POST'],
        ['name' => 'favorites_api#editFavorite', 'url' => '/api/{apiversion}/favorites/{id}', 'verb' => 'PUT'],
        ['name' => 'favorites_api#deleteFavorite', 'url' => '/api/{apiversion}/favorites/{id}', 'verb' => 'DELETE'],

        // favorites
        ['name' => 'favorites#getFavorites', 'url' => '/favorites', 'verb' => 'GET'],
        ['name' => 'favorites#addFavorite', 'url' => '/favorites', 'verb' => 'POST'],
        ['name' => 'favorites#editFavorite', 'url' => '/favorites/{id}', 'verb' => 'PUT'],
        ['name' => 'favorites#deleteFavorite', 'url' => '/favorites/{id}', 'verb' => 'DELETE'],
        ['name' => 'favorites#deleteFavorites', 'url' => '/favorites', 'verb' => 'DELETE'],
        ['name' => 'favorites#renameCategories', 'url' => '/favorites-category', 'verb' => 'PUT'],

        ['name' => 'favorites#exportAllFavorites', 'url' => '/export/favorites', 'verb' => 'GET'],
        ['name' => 'favorites#exportFavorites', 'url' => '/export/favorites', 'verb' => 'POST'],
        ['name' => 'favorites#importFavorites', 'url' => '/import/favorites', 'verb' => 'POST'],

        // tracks
        ['name' => 'tracks#getTracks', 'url' => '/tracks', 'verb' => 'GET'],
        ['name' => 'tracks#getTrackFileContent', 'url' => '/tracks/{id}', 'verb' => 'GET'],
        ['name' => 'tracks#addTracks', 'url' => '/tracks', 'verb' => 'POST'],
        ['name' => 'tracks#addTrackDirectory', 'url' => '/tracks-directory', 'verb' => 'POST'],
        ['name' => 'tracks#editTrack', 'url' => '/tracks/{id}', 'verb' => 'PUT'],
        ['name' => 'tracks#deleteTrack', 'url' => '/tracks/{id}', 'verb' => 'DELETE'],
        ['name' => 'tracks#deleteTracks', 'url' => '/tracks', 'verb' => 'DELETE'],
    ]
];
