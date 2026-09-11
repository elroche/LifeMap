<?php

namespace App\DataFixtures;

use App\Entity\Database;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class DatabaseFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['database'];
    }

    public function load(ObjectManager $manager): void
    {
        $databases = [

            /*
             * ============================================================
             * RELATIONNELLES — SQL
             * ============================================================
             */

            'MySQL',
            'MariaDB',
            'PostgreSQL',
            'SQLite',
            'Oracle Database',
            'Microsoft SQL Server',
            'IBM Db2',
            'SAP HANA',
            'CockroachDB',
            'TiDB',
            'YugabyteDB',
            'Firebird',
            'InterBase',
            'H2',
            'HSQLDB',
            'Apache Derby',
            'DuckDB',
            'SingleStore',
            'VoltDB',
            'OceanBase',
            'GaussDB',

            /*
             * ============================================================
             * POSTGRESQL / DISTRIBUTION
             * ============================================================
             */

            'Amazon Aurora PostgreSQL',
            'Amazon Aurora MySQL',
            'Amazon RDS',
            'Google Cloud SQL',
            'Google AlloyDB',
            'Azure Database for PostgreSQL',
            'Azure Database for MySQL',

            /*
             * ============================================================
             * NOSQL — DOCUMENT
             * ============================================================
             */

            'MongoDB',
            'CouchDB',
            'Couchbase',
            'RavenDB',
            'RethinkDB',
            'Firestore',
            'Amazon DocumentDB',
            'Azure Cosmos DB',
            'ArangoDB',
            'MarkLogic',
            'RavenDB',
            'OrientDB',

            /*
             * ============================================================
             * KEY-VALUE / CACHE
             * ============================================================
             */

            'Redis',
            'Valkey',
            'Memcached',
            'Amazon DynamoDB',
            'Amazon ElastiCache',
            'Azure Cache for Redis',
            'Google Memorystore',
            'Aerospike',
            'Riak KV',
            'FoundationDB',
            'etcd',
            'Consul KV',

            /*
             * ============================================================
             * COLONNES / WIDE COLUMN
             * ============================================================
             */

            'Apache Cassandra',
            'ScyllaDB',
            'Apache HBase',
            'Google Bigtable',
            'Amazon Keyspaces',
            'Azure Cosmos DB Cassandra API',
            'Accumulo',

            /*
             * ============================================================
             * GRAPH
             * ============================================================
             */

            'Neo4j',
            'Amazon Neptune',
            'ArangoDB',
            'OrientDB',
            'JanusGraph',
            'TigerGraph',
            'Memgraph',
            'Dgraph',
            'NebulaGraph',
            'HugeGraph',
            'Virtuoso',

            /*
             * ============================================================
             * TIME SERIES
             * ============================================================
             */

            'InfluxDB',
            'TimescaleDB',
            'QuestDB',
            'VictoriaMetrics',
            'OpenTSDB',
            'Prometheus',
            'TDengine',
            'Apache Druid',
            'ClickHouse',

            /*
             * ============================================================
             * DATA WAREHOUSE / ANALYTICS
             * ============================================================
             */

            'Snowflake',
            'Google BigQuery',
            'Amazon Redshift',
            'Azure Synapse Analytics',
            'Databricks SQL',
            'ClickHouse',
            'Apache Druid',
            'Trino',
            'Presto',
            'StarRocks',
            'Doris',
            'Vertica',
            'Teradata',
            'Greenplum',
            'Yellowbrick',

            /*
             * ============================================================
             * SEARCH / INDEXATION
             * ============================================================
             */

            'Elasticsearch',
            'OpenSearch',
            'Apache Solr',
            'Meilisearch',
            'Typesense',
            'Sphinx',
            'Manticore Search',
            'Algolia',
            'Vespa',

            /*
             * ============================================================
             * VECTOR DATABASES / VECTOR STORES
             * ============================================================
             */

            'Pinecone',
            'Weaviate',
            'Milvus',
            'Qdrant',
            'Chroma',
            'Vespa',
            'LanceDB',
            'FAISS',
            'pgvector',
            'Redis Vector Search',
            'MongoDB Vector Search',
            'OpenSearch Vector Engine',

            /*
             * ============================================================
             * EMBARQUÉES / LOCAL
             * ============================================================
             */

            'SQLite',
            'DuckDB',
            'RocksDB',
            'LevelDB',
            'LMDB',
            'Berkeley DB',
            'Apache Derby',
            'H2',
            'HSQLDB',
            'Realm',
            'ObjectBox',

            /*
             * ============================================================
             * OBJETS / ORIENTÉES OBJETS
             * ============================================================
             */

            'ObjectDB',
            'db4o',
            'ObjectBox',
            'Realm',

            /*
             * ============================================================
             * DISTRIBUÉES
             * ============================================================
             */

            'CockroachDB',
            'YugabyteDB',
            'TiDB',
            'Citus',
            'Vitess',
            'PlanetScale',
            'SingleStore',
            'FoundationDB',
            'Apache Cassandra',
            'ScyllaDB',

            /*
             * ============================================================
             * MULTIMODÈLES
             * ============================================================
             */

            'ArangoDB',
            'Couchbase',
            'Azure Cosmos DB',
            'MarkLogic',
            'OrientDB',
            'SurrealDB',
            'Fauna',

            /*
             * ============================================================
             * SERVERLESS / CLOUD DATABASES
             * ============================================================
             */

            'Amazon Aurora',
            'Amazon DynamoDB',
            'Amazon Neptune',
            'Amazon DocumentDB',
            'Amazon Timestream',
            'Amazon Keyspaces',

            'Google Firestore',
            'Google Cloud Spanner',
            'Google Bigtable',
            'Google BigQuery',
            'Google AlloyDB',

            'Azure Cosmos DB',
            'Azure SQL Database',
            'Azure Database for PostgreSQL',
            'Azure Database for MySQL',

            'Supabase',
            'Neon',
            'PlanetScale',
            'Turso',
            'CockroachDB Serverless',
            'MongoDB Atlas',

            /*
             * ============================================================
             * OPEN SOURCE / DISTRIBUÉES
             * ============================================================
             */

            'Apache Cassandra',
            'Apache CouchDB',
            'Apache HBase',
            'Apache Ignite',
            'Apache Geode',
            'Apache Kudu',
            'Apache Accumulo',
            'Apache Doris',
            'Apache Pinot',
            'Apache Druid',

            /*
             * ============================================================
             * CACHE / DATASTORE SPÉCIALISÉS
             * ============================================================
             */

            'Redis',
            'Valkey',
            'Memcached',
            'Hazelcast',
            'Apache Ignite',
            'Ehcache',
            'Infinispan',
            'KeyDB',
            'Dragonfly',
            'Garnet',

            /*
             * ============================================================
             * EVENT STORE / STREAMING DATA STORE
             * ============================================================
             */

            'EventStoreDB',
            'Apache Kafka',
            'Redpanda',
            'NATS JetStream',

            /*
             * ============================================================
             * BASES SPÉCIALISÉES
             * ============================================================
             */

            'ClickHouse',
            'Apache Pinot',
            'Apache Druid',
            'QuestDB',
            'InfluxDB',
            'TimescaleDB',
            'TDengine',

            /*
             * ============================================================
             * BASES DÉCENTRALISÉES / WEB3
             * ============================================================
             */

            'OrbitDB',
            'GunDB',
            'Ceramic',
            'IPFS',
            'Filecoin',

            /*
             * ============================================================
             * BASES MOBILES / EMBARQUÉES
             * ============================================================
             */

            'Realm',
            'Core Data',
            'SQLite',
            'Room',
            'ObjectBox',
            'Realm Kotlin',
            'Realm Swift',
            'WatermelonDB',

            /*
             * ============================================================
             * AUTRES
             * ============================================================
             */

            'SurrealDB',
            'Fauna',
            'EdgeDB',
            'XTDB',
            'TerminusDB',
            'CrateDB',
            'QuestDB',
            'Apache Doris',
            'StarRocks',
            'Materialize',
        ];

        // Supprime les doublons éventuels.
        $databases = array_unique($databases);

        foreach ($databases as $name) {
            $database = new Database();
            $database->setName($name);

            $manager->persist($database);
        }

        $manager->flush();
    }
}
