<?php
namespace Calendar;
use PDO;

class Events {

    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }




    public function getEventsBetween (\DateTime $start, \DateTime $end): array {
        $sql = "SELECT * FROM events WHERE start BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND
          '{$end->format('Y-m-d 23:59:59')}'";
        $statement = $this->pdo->query($sql);
        $results = $statement->fetchAll();
        return $results;
    }



    public function getEventsBetweenByDay (\DateTime $start, \DateTime $end): array {
        $events = $this->getEventsBetween($start, $end);
        $days = [];
        foreach($events as $event) {
            $date = explode(' ', $event['start'])[0];
            if (!isset($days[$date])) {
                $days[$date] = [$event];
            } else {
                $days[$date][] = $event;
            }
        }
        return $days;
    }


    public function find (int $id): array {
        return $this->pdo->query("SELECT * FROM events WHERE id = $id LIMIT 1")->fetch();
    }
}
