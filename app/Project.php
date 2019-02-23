<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //  protected $fillable =[
    //     'title',
    //     'nazov',
    //     'description'
    // ]; 
    //
    protected $guarded =[];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        //dd($body);

       //  $this->tasks()->create(['body'=>$body]);
        $this->tasks()->create($task);

        # code...
    }
}
