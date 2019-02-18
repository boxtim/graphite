<?php declare (strict_types = 1);

use Graphite as G;
use RedBeanPHP\R;

R::setup();

G\resolvers([
    'mutations' => [
        'foo' => 'bar',
    ],
    'queries' => [
        'baz' => 'plu',
    ],
]);

G\schema([
    'enums.gql',
    'types.gql',
    'queries.gql',
    'mutations.gql',
]);

G\endpoint('/graphql');
