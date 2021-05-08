/**
 * A simple function that returns true if all the arguments to the function are not empty
 * It is similar to isset function that tahe multiple parameters
 */
function isempty(): bool {
    foreach (func_get_args() as $values) {
        if (empty($values)) {
            return true;
        }
    }
    return empty(func_get_args());
}
