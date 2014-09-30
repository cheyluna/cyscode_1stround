<?php
class ChocolateController extends AppController
{
    public function index()
    {
        $remaining_bars = 0;
        $choco = new Chocolate;
        $choco->raw_string = Param::get('raw_string');

        if (isset($_POST['submit'])) {
            try {
                $choco->validateString($choco);
                $remaining_bars = $choco->getRemainingBars($choco->raw_string);
            } catch (ValidationException $e) {
                // Do something here
            }
        }

        $this->set(get_defined_vars());
    }
}
