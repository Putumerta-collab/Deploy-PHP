pipeline {
    agent any

    environment {
        registry = "pmerta22/deploy-php"
        registryCredential = 'dockerhub'
        kubeConfig = credentials('kubeconfig')
    }

    stages {
        stage('Checkout Code') {
            steps {
                 git branch: 'main', url: 'https://github.com/Putumerta-collab/Deploy-PHP.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    dockerImage = docker.build("${registry}:latest")
                }
            }
        }

        stage('Push Docker Image') {
            steps {
                script {
                    docker.withRegistry('https://index.docker.io/v1/', registryCredential) {
                        dockerImage.push("latest")
                        
                    }
                }
            }
        }

        stage('Deploy PHP App to Kubernetes') {
            steps {
                withCredentials([file(credentialsId: 'kubeconfig', variable: 'KUBECONFIG')]) {
                    sh '''
                    kubectl --kubeconfig=$KUBECONFIG delete -f php-deployment.yaml
                    kubectl --kubeconfig=$KUBECONFIG apply -f php-service.yaml
                    '''
                }
            }
        }
    }

    post {
        always {
            cleanWs()
        }
    }
}
