pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build') {
            environment {
                PHP_VERSION = '8.1.6' // Sesuaikan versi PHP yang Anda inginkan di sini
            }
            steps {
                script {
                    docker.image("php:${PHP_VERSION}-fpm").inside('-u root') {
                        sh 'apt-get update && apt-get install -y unzip' // Install paket tambahan jika diperlukan
                        sh 'rm composer.lock'
                        sh 'composer install'
                    }
                }
            }
        }

        stage('Testing') {
            steps {
                script {
                    docker.image('ubuntu').inside('-u root') {
                        sh 'echo "Ini adalah test"'
                    }
                }
            }
        }
    }
}
