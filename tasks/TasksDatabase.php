<?php

class TasksDatabase
{
    public static function createTasksDb()
    {
        $dbh = new PDO("mysql:host=localhost;dbname=db_tasks", "root", "");

        return $dbh;
    }

    public static function getAllCandidatesFromDB()
    {
        $query = self::createTasksDb()->query('SELECT * FROM it_candidates');

        return $query;
    }

    public static function getAllTeamsFromDB()
    {
        $query = self::createTasksDb()->query('SELECT * FROM it_teams');

        return $query;
    }

    public static function getAllTeamsMembersFromDB()
    {
        $query = self::createTasksDb()->query('SELECT * FROM it_teams_members');

        return $query;
    }

    public static function getAllTeamsNeedsFromDB()
    {
        $query = self::createTasksDb()->query('SELECT * FROM it_teams_needs');

        return $query;
    }
}