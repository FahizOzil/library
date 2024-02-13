<?php

session_unset();

session_destroy();

return header('location: /login');