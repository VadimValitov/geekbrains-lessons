<?php

class FrontController
{
    private $handlers = [];

    public function addHandler(Handler $handler, $method, $path)
    {
        $this->handlers[$method][] = [$path, $handler];
    }

    public function run(Request $request)
    {
        foreach ($this->handlers[$request->getMethod()] as $handler) {
            if ($request->getPath() == $handler[0]) {
                return $handler[1]->handle($request);
            }
        }

        return null;
    }
}
