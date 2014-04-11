<?php namespace Belt;

class Collections {

    /**
     * Iterate through a collection
     *
     * @param  array    $collection
     * @param  \Closure $iterator
     * @return void
     */
    public function each(array $collection, \Closure $iterator)
    {
        foreach ($collection as $key => $node)
        {
            $iterator($key, $node);
        }
    }

    /**
     * Convert a value to an array
     *
     * @param  mixed $value
     * @return array
     */
    public function toArray($value)
    {
        return (array) $value;
    }

    /**
     * Whether any values in the $collection pass the $iterator
     *
     * @param  array    $collection
     * @param  \Closure $iterator
     * @return boolean
     */
    public function any(array $collection, \Closure $iterator)
    {
        foreach ($collection as $element)
        {
            if ($iterator($element))
            {
                return true;
            }
        }

        return false;
    }

    /**
     * Extract an array of values associated with the $key
     *
     * @param  array  $collection
     * @param  string $key
     * @return array
     */
    public function pluck(array $collection, $key)
    {
        $values = [];

        foreach ($collection as $node)
        {
            if ( ! isset($node[$key])) continue;

            $values[] = $node[$key];
        }

        return $values;
    }

}
