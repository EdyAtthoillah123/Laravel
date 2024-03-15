pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build') {
            steps {
                script {
                    docker.image('php:8.1.6-fpm').inside('-u root') {
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
