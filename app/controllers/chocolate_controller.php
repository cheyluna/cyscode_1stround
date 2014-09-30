<?php
class ChocolateController extends AppController
{
    public function index()
    {
        $choco = new Chocolate;
        $choco->raw_string = Param::get('raw_string');

        if (isset($_POST['submit'])) {
            try {
                $choco->validateString($choco);
            } catch (ValidationException $e) {
                // Do something here
            }
        }

        $this->set(get_defined_vars());
    }
}
