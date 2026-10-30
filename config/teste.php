<?php


if (!class_exists('Database')) {
    class Database
    {
        private static ?PDO $conn = null;


        public static function config(): array
        {
            return [
                'host' => 'sql307.infinityfree.com',
                'name' => 'if0_43314722_XXX',
                'user' => 'if0_43314722',
                'pass' => 'ritaemari',


            ];
        }


        public static function getConnection(): PDO
        {
            if (self::$conn === null) {
                $c = self::config();
                try {
                    self::$conn = new PDO(
                        "mysql:host={$c['host']};dbname={$c['name']};charset=utf8mb4",
                        $c['user'],
                        $c['pass'],
                        [
                            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        ]
                    );
                } catch (PDOException $e) {
                    error_log('Erro de conexão: ' . $e->getMessage());
                    die('Erro ao conectar ao banco de dados.');
                }
            }
            return self::$conn;
        }
    }
}
return Database::config();
