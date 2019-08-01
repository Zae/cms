<?php
namespace craft\gql\arguments\elements;

use GraphQL\Type\Definition\Type;

/**
 * Class StructureElement
 */
abstract class StructureElement extends BaseElement
{
    /**
     * @inheritdoc
     */
    public static function getArguments(): array
    {
        return array_merge(parent::getArguments(), [
            'withStructure' => [
                'name' => 'withStructure',
                'type' => Type::boolean(),
                'description' => 'Explicitly determines whether the query should join in the structure data.'
            ],
            'structureId' => [
                'name' => 'structureId',
                'type' => Type::int(),
                'description' => 'Determines which structure data should be joined into the query.'
            ],
            'level' => [
                'name' => 'level',
                'type' => Type::int(),
                'description' => 'Narrows the query results based on the elements’ level within the structure.'
            ],
            'hasDescendants' => [
                'name' => 'hasDescendants',
                'type' => Type::boolean(),
                'description' => 'Narrows the query results based on whether the elements have any descendants.'
            ],
            'ancestorOf' => [
                'name' => 'ancestorOf',
                'type' => Type::int(),
                'description' => 'Narrows the query results to only elements that are ancestors of another element.'
            ],
            'ancestorDist' => [
                'name' => 'ancestorDist',
                'type' => Type::int(),
                'description' => 'Narrows the query results to only elements that are up to a certain distance away from the element specified by `ancestorOf`.'
            ],
            'descendantOf' => [
                'name' => 'descendantOf',
                'type' => Type::int(),
                'description' => 'Narrows the query results to only elements that are descendants of another element.'
            ],
            'descendantDist' => [
                'name' => 'descendantDist',
                'type' => Type::int(),
                'description' => 'Narrows the query results to only elements that are up to a certain distance away from the element specified by `descendantOf`.'
            ],
            'leaves' => [
                'name' => 'leaves',
                'type' => Type::boolean(),
                'description' => 'Narrows the query results based on whether the elements are “leaves” (element with no descendants).'
            ],
        ]);
    }
}
