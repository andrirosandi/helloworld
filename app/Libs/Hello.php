<?php

namespace App\Libs;

use Illuminate\Http\Request;

class Hello
{

    //
    public static function json(Request $request, $controllerAction, $params = [])
    {
        [$controller, $action] = explode(":", $controllerAction);

        // if controller does not start with a backslash, prepend base namespace
        if ($controller[0] !== "\\") {
            $controller = "\\App\\Http\\Controllers\\Api\\" . $controller;
        }

        // instantiate the controller
        $controllerInstance = new $controller;

        // insert input
        $params = array_merge([$request->all()],$params);

        // resolve method dependencies
        $dependencies = self::resolveMethodDependencies($params, new \ReflectionMethod($controllerInstance, $action));
        
        $result = $controllerInstance->$action(...$dependencies);

        return response()->json($result);
    }

    protected static function resolveMethodDependencies($parameters, \ReflectionMethod $method)
    {
        foreach ($method->getParameters() as $key => $parameter) {
            $type = $parameter->getType();
            if ($type && !$type->isBuiltin() && $type instanceof \ReflectionNamedType) {
                $className = $type->getName();
                if ($className === Request::class) {
                    array_unshift($parameters, request());
                }
            }
        }

        return $parameters;
    }
}