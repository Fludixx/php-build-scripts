<?php

$ffi = \FFI::cdef(
    "void ffi_test();",
    "./ffi_test.so"
);

$ffi->ffi_test();
