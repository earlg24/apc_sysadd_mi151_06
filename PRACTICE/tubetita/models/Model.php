<?php
$model = new EntryForm();
$model->name = 'Qiang';
$model->email = 'bad';
if ($model->validate()) {
// Good!
} else {
// Failure!
// Use $model->getErrors()
}